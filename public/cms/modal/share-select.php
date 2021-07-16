<div class="modal fade bg-dark-o-50" id="shareSelect" tabindex="-1" aria-labelledby="shareSelect" aria-modal="true"
	role="dialog">
	<div class="modal-dialog modal-dialog-centered px-5" role="document" style="min-width:40%">
	<div class="modal-content overflow-hidden">
            <!-- <div class="modal-header">
                <h5 class="modal-title font-weight-bold">제목 입력</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times fa-sm" aria-hidden="true"></i>
                </button>
            </div> -->
            <div class="modal-body">
			<form>
				<div class="form-group row">
					<label class="col-md-2 col-form-label font-weight-bold">공유대상 선택</label>
					<div class="col-md-10">
						<select class="form-control form-control-solid form-control-lg">
							<option value="all">전체선택</option>
							<option value="AX">1</option>
							<option value="AL">2</option>
							<option value="DZ">3</option>
							<option value="AS">4</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label font-weight-bold">학교급</label>
					<div class="col-md-10">
						<div class="radio-inline">
							<label class="radio radio-success">
							    <input type="radio" checked="checked" name="radios_lec_shr1">
							<span></span>초등학교</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr1">
							<span></span>중/고등학교</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr1">
							<span></span>공통</label>
						</div>
					</div>   
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label font-weight-bold">학년</label>
					<div class="col-md-10">
					<div class="radio-inline">
							<label class="radio radio-success">
								<input type="radio" checked="checked" name="radios_lec_shr2">
							<span></span>1학년</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr2">
							<span></span>2학년</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr2">
							<span></span>3학년</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr2">
							<span></span>4학년</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr2">
							<span></span>5학년</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr2">
							<span></span>6학년</label>
						</div>
					</div> 
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label font-weight-bold">학기</label>
					<div class="col-md-10"><div class="radio-inline">
							<label class="radio radio-success">
							<input type="radio" checked="checked" name="radios_lec_shr3">
							<span></span>1학기</label>
							<label class="radio radio-success">
							<input type="radio" name="radios_lec_shr3">
							<span></span>2학기</label>
							<label class="radio radio-success">
							<input type="radio" name="radios_lec_shr3">
							<span></span>공통</label>
						</div></div> 
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label font-weight-bold">과목</label>
					<div class="col-md-10"><div class="radio-inline">
							<label class="radio radio-success">
								<input type="radio" checked="checked" name="radios_lec_shr4">
							<span></span>국어</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr4">
							<span></span>영어</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr4">
							<span></span>수학</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr4">
							<span></span>사회/역사/도덕</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr4">
							<span></span>과학</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr4">
							<span></span>예술</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr4">
							<span></span>체육</label>
							<label class="radio radio-success">
								<input type="radio" name="radios_lec_shr4">
							<span></span>기타</label>
						</div></div> 
				</div>
				<div class="form-group row mb-0">
					<label class="col-md-2 col-form-label font-weight-bold">공유대상 E-mail</label>
					<div class="col-md-10">
					    <input type="text" class="form-control form-control-solid form-control-lg" placeholder="공유대상 이메일을 입력하세요.">
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer text-center py-2">
			<a href="#" class="btn btn-secondary font-weight-bold" data-dismiss="modal" aria-label="Close">취소</a>
			<a href="?cms=/lesson/interaction" class="btn btn-success font-weight-bold">공유하기</a>
		</div>
	</div>
        </div>	
	
</div>